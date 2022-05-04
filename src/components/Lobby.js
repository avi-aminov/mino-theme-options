import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { getRequest, postRequest } from '../services/Api';
import { initData } from '../redux/actions/data';
import { initOptions } from '../redux/actions/options';
import { initHelper } from '../redux/actions/helper';
import Tabs from './partials/Tabs';
import TabContent from './partials/TabsContent';
import AlertMessage from '../components/partials/AlertMessage';
import PanelHeader from '../components/partials/PanelHeader';


/**
 * TODO: remove Jquery function
 */
import { initAppJQuryFunction } from './helper/jQueryFunc';


const Lobby = () => {
    const [loader, setLoader] = useState( 'Save Settings' );
    const [status, setStatus] = useState('loader');

    const fields_data = useSelector((state) => state.dataReducer);
    const options = useSelector((state) => state.optionsReducer);
    const dispatch = useDispatch();

    useEffect( () => {
        fetchOptionsData();
    }, [] );

    async function fetchOptionsData() {
        try {
            const res = await getRequest('options');
            if(res.data){
                dispatch(initData(res.data.data));
                dispatch(initOptions(res.data.options));
                dispatch(initHelper(res.data.helper));

                console.log('DATA: ', res.data.data);

                initAppJQuryFunction();

                if(!res.data.options.length){
                    setStatus('empty');
                }
            }    
        } catch(error) {
            console.log("error: ", error);
        }
    }

    async function saveOptionsData(url, data) {
        setLoader( 'Saving...' );
        try {
            const res = await postRequest(url, data);
            console.log("save: ", res.data);
            setLoader( 'Save Settings' );
        } catch(error) {
            console.log("error: ", error);
        }
    }

    const handleSubmit = (e) => {
        e.preventDefault();
        console.log("save: ", fields_data.data);
        saveOptionsData('options', {state: fields_data.data});
    };

    return (
        <>
        {
            options.options && options.options.length > 0 ?
            <div className="page-wrapper">        
                <div className="admin-options-panel clearfix">
                    <form onSubmit={ (e) => handleSubmit(e) }>
                       <PanelHeader loader={loader} />
                        <div className="option-panel-main">
                            <Tabs />
                            <TabContent />
                        </div>
                    </form>
                </div>
            </div>
            : 
            status === 'empty' ?
                <AlertMessage />  : 
                <div className="loader"> </div>
        }
        </>
    );
};
export default Lobby;