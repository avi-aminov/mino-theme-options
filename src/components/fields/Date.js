import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";

const Date = ({field}) => {
    const label = field.label || '';
    const description = field.description || '';
    const example = field.example || '';
    const format = field.format || 'dd/MM/yyyy';

    const [startDate, setStartDate] = useState();
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleInputChange = (date) => {
        setStartDate(date);
        dispatch(updateData({key:field.id, value:date}));
    };
    
    useEffect( () => {
        if(fields_data.data && fields_data.data[field.id]){
            const value = fields_data.data[field.id];
            setStartDate(new window.Date(value));
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
                        <div className="date-time-holder">
                            <label for="">Date</label>
                            <DatePicker 
                                selected={startDate} 
                                onChange={(date) => handleInputChange(date)} 
                                dateFormat={format}
                            />
                            <span className="icon">
                                <i className="ri-calendar-line"> </i>
                            </span>
                        </div>
                        <div className="field-description">{example}</div>
                    </div>
                </div>
            </div>
        </div>
    )
};

export default Date; 