import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const DropDownBox = ({field}) => {
    const label = field.label || 'Drop Down Box';
    const description = field.description || '';
    const content = field.content || '';
    const options = field.options || null;

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
                    <h5>{label}</h5>
                    <div className="field-description">{description}</div>
                </div>
                <div className="right-col">
                    <div className="box">
                        <select onChange={(e) => {handleInputChange(e.target.value)}} name={field.id} id={field.id} className="general-select">
                        {
                            options ?
                            options.map((option) => {
                                return (
                                    <option value={option.key} selected={val === option.key}>
                                        {option.value}
                                    </option>
                                );
                            })
                            : null
                        }
                        </select>
                        <div className="field-description">{content}</div>
                    </div>
                </div>
            </div>
        </div>
    )
};

export default DropDownBox;