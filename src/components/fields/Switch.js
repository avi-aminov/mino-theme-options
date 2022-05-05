import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const Switch = ({field}) => {

    const label = field.label || '';
    const description = field.description || '';

    const [val, setVal] = useState(false);
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();
  
    useEffect( () => {
        if(fields_data.data && fields_data.data[field.id]){
            const value = fields_data.data[field.id];
            setVal(value);
        }
    }, [fields_data]);

    const handleInputChange = (event) => {
        const value = !val;
        setVal(value);
        dispatch(updateData({key:[event.target.name], value:value}));
    };

    return(
        <div className="options-content-inner">
            <div className="grid">
                <div className="left-col">
                    <h5>{label}</h5>
                    <div className="field-description">{description}</div>
                </div>
                <div className="right-col">
                    <div className="box">
                        <label className="switch">
                            <input type="checkbox" id={field.id}
                            name={field.id} onChange={handleInputChange} 
                            checked={val} />
                            <span className="slider round"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    )
};

export default Switch;