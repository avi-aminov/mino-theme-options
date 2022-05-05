import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const TextInput = ({field}) => {

    const placeholder = field.placeholder || '';
    const label = field.label || '';
    const description = field.description || '';
    const example = field.example || '';
    const type = field.isNumber ? "number" : 'text';
    const col_size = field.type ? "3" : 'box-half';
    const em = field.em || '';

    const [val, setVal] = useState('');
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleInputChange = (event) => {
        const value = event.target.value;
        setVal(value);
        dispatch(updateData({key:[event.target.name], value:value}));
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
                    <div className="box box-half">
                        <label for="header-slogan">Header slogan</label>
                        <input onChange={ handleInputChange } id={field.id} name={field.id} value={val} type={type} placeholder= {placeholder} />
                        <div className="field-description">{example}</div>
                    </div>  
                </div>
            </div>
        </div>
    )
};

export default TextInput; 