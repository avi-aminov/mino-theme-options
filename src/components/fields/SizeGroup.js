import React from 'react';
import NumberBoxItem from './NumberBoxItem';

const SizeGroup = ({field}) => {
    const placeholder = field.placeholder || '';
    const label = field.label || '';
    const top_label = field.top_label || '';
    const description = field.description || '';
    const em = field.em || null;
    
    return(
            <div className="options-content-inner">
            <div className="grid">
                <div className="left-col">
                    <h5>{label}</h5>
                    <div className="field-left-description">{ description }</div>
                </div>
                <div className="right-col">

                    <NumberBoxItem 
                        id={field.id+"_top"} 
                        top_label={top_label} 
                        placeholder={placeholder} 
                    />

                    <NumberBoxItem 
                        id={field.id+"_right"} 
                        top_label={top_label} 
                        placeholder={placeholder} 
                    />

                    <NumberBoxItem 
                        id={field.id+"_down"} 
                        top_label={top_label} 
                        placeholder={placeholder} 
                    />

                    <NumberBoxItem 
                        id={field.id+"_left"} 
                        top_label={top_label} 
                        placeholder={placeholder} 
                    /> 

                </div>
            </div>     
        </div>
    )
};

export default SizeGroup; 