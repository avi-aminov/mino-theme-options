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
        fetchOptions();
    }, []);


    /**
     * get options fields
     * @returns {Promise<void>}
     */
    async function fetchOptions() {
        try {
            const options_fields = await getRequest('options');
            const options_data = await getRequest('data');
            const helper_data = await getRequest('helper_data');

            if( options_fields.data && options_data.data && helper_data.data){
                dispatch(initOptions(options_fields.data));
                dispatch(initData(options_data.data));
                dispatch(initHelper(helper_data.data));

                initAppJQuryFunction();

                console.log("options_fields: ", options_fields.data);
                console.log("options_data: ", options_data.data);
                console.log("helper_data: ", helper_data.data);

                if(!options_fields.data.length){
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