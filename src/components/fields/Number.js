import React from 'react';
import NumberBoxItem from './NumberBoxItem';

const Number = ({field}) => {

    const placeholder = field.placeholder || '';
    const label = field.label || 'Number';
    const description = field.description || '';
    const content = field.content || null;
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
                        placeholder={placeholder} 
                    />
                </div>
            </div>

        </div>
    )
};

export default Number; 