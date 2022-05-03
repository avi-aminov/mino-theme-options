import React, { useState } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';

const Fonts = ({field}) => {
    const label = field.label || '';
    
    const [fontUse, setFontUse] = useState(''); 

    const fields_helper = useSelector((state) => state.helperReducer);
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const onSelectChange = (e) => {
        const use = e.target.options[e.target.selectedIndex].dataset.use;
        setFontUse(use);
        dispatch(updateData({key:field.id, value:e.target.value}));
    };

    const setExample = (font) => {
        if(fontUse === ''){
            setFontUse(font.use);
        }
    }
    
    return(
        <div className="options-content-inner">
            <div className="grid">
                <div className="left-col">
                    <h5>{label}</h5>
                </div>
                <div className="right-col">
                    <div className="box">
                    {
                        fields_helper.helper && fields_helper.helper.fonts ? 
                        
                        <select onChange={(e) => {onSelectChange(e)}} name={field.label} id={field.label} className="general-select">
                        {
                                fields_helper.helper.fonts.map((font) => {
                                return (
                                    <>
                                    {fields_data.data[field.id] === font.key ? setExample(font) : null}
                                    <option data-use={font.use} value={font.key} selected={ fields_data.data[field.id] === font.key}>
                                        {font.name}
                                    </option>
                                    </>
                                );
                            })
                        }
                        </select>
                        : ""
                    }
                        <br />
                        <br />
                        <label for="files"> Use example: {fontUse} </label>
                    </div>  
                </div>
            </div>
        </div>
    )
};

export default Fonts;