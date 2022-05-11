import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const NumberBoxItem = ({id, placeholder}) => {

    const [val, setVal] = useState(0);
    const [emVal, setemVal] = useState('px');
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleInputChange = (event) => {
        const value = event.target.value;
        setVal(value);
        dispatch(updateData({key:[event.target.name], value: JSON.stringify({number: value, em: emVal}) }));
    }; 
    
    const handleEmChange = (e) => {
        const value = e.target.value;
        setemVal(value);
        dispatch(updateData({key:[id], value: JSON.stringify({number: val, em: value}) }));
    }; 

    useEffect( () => {
        if(fields_data.data && fields_data.data[id]){
            const value = JSON.parse(fields_data.data[id]);
            if(value.number) setVal(value.number);
            if(value.em) setemVal(value.em);
        }
    }, [fields_data] );

    return(
        <div className="box">
            <label for="margin-top">&nbsp;</label>
            <div className="select-inside-input">
                <input placeholder={placeholder} onChange={ handleInputChange } 
                        type="number" id={id} name={id} value={val} />
                <select onChange={(e) => { handleEmChange(e)}} name="speed" className="number-inside-input">
                    <option selected={'px' === emVal} value="px">px</option>
                    <option selected={'prosent' === emVal} value="prosent">%</option>
                    <option selected={'em' === emVal} value="em">em</option>
                </select>
            </div>
        </div>
    )
};

export default NumberBoxItem;