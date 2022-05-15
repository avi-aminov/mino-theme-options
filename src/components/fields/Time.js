import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';
import moment from 'moment';
import TimePicker from 'rc-time-picker';
import 'rc-time-picker/assets/index.css';

const Time = ({field}) => {
    const label = field.label || field.type;
    const description = field.description || '';
    const content = field.content || '';
    const second = field.second || true;

    const str = second ? 'HH:mm:ss' : 'HH:mm';

    const [val, setVal] = useState(moment());
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleInputChange = (v) => {
        setVal(v);
        dispatch(updateData({key:[field.id], value:v }));
    };
    
    useEffect( () => {
        if(fields_data.data && fields_data.data[field.id]){
            const value = fields_data.data[field.id];
            setVal(moment(value));
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
                            <label for="">&nbsp;</label>
                            <TimePicker
                                showSecond={second}
                                onChange={handleInputChange}
                                value={val}
                            />
                        </div>
                        <div className="field-description">{content}</div>
                    </div>
                </div>
            </div>
        </div>
    )
};

export default Time; 