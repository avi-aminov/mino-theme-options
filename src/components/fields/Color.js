import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const Color = ({field}) => {

    const label = field.label || '';
    const description = field.description || '';
    const type = field.type || 'text';
    const em = field.em || '';

    const [val, setVal] = useState(0);
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleInputChange = (event) => {
        const value = event.target.value;
        setVal(value);
        dispatch(updateData({key:[field.id], value:value}));
    };  
    
    useEffect( () => {
        if(fields_data.data[field.id]){
            const value = fields_data.data[field.id];
            setVal(value);
        }
    }, fields_data );

    return(
        <div className="options-content-inner">
            <div className="grid">
                <div className="left-col">
                    <h5>{label}</h5>
                    <div className="field-description">{description}</div>
                </div>
                <div className="right-col">
                    <div className="box">
                        <div className="color-picker-box">
                            <input 
                                type="color" className="form-control form-control-color" 
                                id={field.id} value={val} 
                                title="Choose your color"
                                onChange={ (e) => {handleInputChange(e)} }
                            />
                        </div>
                        <div className="field-description">Color: {val}</div>
                    </div> 
                </div>
            </div>
        </div>
    )
};

export default Color; 