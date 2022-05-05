import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const SelectBox = ({field}) => {
    const label = field.label || '';
    const description = field.description || '';
    const options = field.options || null;
    let scaling = field.scaling || '';

    if(field.scaling === 'vertical'){
        scaling = 'vertical-box';
    }

    const [val, setVal] = useState(0);
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleInputChange = (v) => {
        setVal(v);
        dispatch(updateData({key:[field.id], value:v}));
    };
    
    useEffect( () => {
        if(fields_data.data && fields_data.data[field.id]){
            const value = fields_data.data[field.id].toString();
            setVal(value);
        }
    }, [fields_data]);

    return(
        <div className="options-content-inner">
            <div className="grid">
                <div className="left-col">
                    <h5>Select demo</h5>
                </div>
                <div className={ scaling + " right-col" }>
                {
                    val ? 
                    options.map((option) => {
                        return (
                            <div className="box image-select">
                                <label className="radio-container">
                                    <input 
                                        checked={val === option.key}
                                        onChange={()=>{handleInputChange(option.key)}} 
                                        id={option.key} 
                                        type="radio"  
                                        name={field.id} 
                                    />
                                    {option.img ? <img src={option.img} /> : option.value }
                                    <span className="checkmark"></span>
                                </label>
                            </div> 
                        );
                    })
                    : ""  
                }
                </div>
            </div>
        </div>
    )
};

export default SelectBox;