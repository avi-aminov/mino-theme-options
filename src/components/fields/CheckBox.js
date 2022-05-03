import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const Checkbox = ({field}) => {

    const placeholder = field.placeholder || '';
    const label = field.label || '';
    const description = field.description || '';
    const example = field.example || '';
    const options = field.options || [];

    const [val, setVal] = useState([]);
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleInputChange = (e, index) => {
        const temp = val;
        temp[index] = !temp[index];
        console.log("val -", temp);   
        dispatch(updateData({key:[field.id], value: temp.toString() }));
        setVal(temp);
    };
    
    /*
    useEffect( () => {    
        const value = fields_data.data[field.id].split(",");
        setVal(value);   
    }, [fields_data]);
    */

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
                            options.map((option, index) => {
                                return (
                                    <label className="checkbox-container">
                                        {option.value}
                                        <input 
                                            onChange={(e) => {handleInputChange(e, index)}} 
                                            type="checkbox" 
                                            checked={val[index]} 
                                            name={option.key} 
                                            id={option.key} 
                                        />
                                        <span className="checkmark"></span>
                                    </label>
                                );
                            })
                        }
                        <div className="field-description">This area for field description</div>
                    </div>
                </div>
            </div>
        </div>
    )
};

export default Checkbox; 