import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const Radio = ({field}) => {

    const label = field.label || '';
    const description = field.description || '';
    const content = field.content || '';
    const options = field.options || [];

    const [val, setVal] = useState('');
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleInputChange = (event) => {
        const value = event.target.name;
        setVal(value);
        dispatch(updateData({key:[field.id], value:value}));
    };
    
    useEffect( () => {
        if(fields_data.data && fields_data.data[field.id]){
            const value = fields_data.data[field.id];
            setVal(value);
        }
    }, [fields_data]);

    return(
        <div className="options-content-inner">
            <div className="grid">
                <div className="left-col">
                    <h5>{label}</h5>
                    <div className="field-description">{description}</div>
                </div>
                <div className="right-col">
                    <div className="box">

                        {
                            options.map((option) => {
                                return (
                                    <label className="radio-container">
                                        {option.value}
                                        <input 
                                            onClick={(e) => {handleInputChange(e)}} 
                                            type="radio" 
                                            checked={val === option.key} 
                                            name={option.key} 
                                            id={option.key} 
                                        />
                                        <span className="checkmark"> </span>
                                    </label>
                                );
                            })
                        }
                        
                        <div className="field-description">{content}</div>
                    </div> 
                </div>
            </div>
        </div>
    )
};

export default Radio; 