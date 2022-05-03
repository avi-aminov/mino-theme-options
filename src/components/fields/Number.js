import React from 'react';
import NumberBoxItem from './NumberBoxItem';

const Number = ({field}) => {

    const placeholder = field.placeholder || '';
    const label = field.label || '';
    const top_label = field.top_label || '';
    const description = field.description || '';
    const em = field.em || null;
    // need add em by client 

    return(
        <div className="options-content-inner">
            <div className="grid">
                <div className="left-col">
                    <h5>{label}</h5>
                    <div className="field-left-description">{ description }</div>
                </div>
                <div className="right-col">
                    <NumberBoxItem 
                        id={field.id} 
                        top_label={top_label} 
                        placeholder={placeholder} 
                    />
                </div>
            </div>
        </div>
    )
};

export default Number; 