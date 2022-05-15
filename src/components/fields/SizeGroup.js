import React from 'react';
import NumberBoxItem from './NumberBoxItem';

const SizeGroup = ({field}) => {
    const label = field.label || field.type;
    const description = field.description || '';
    
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
                    />

                    <NumberBoxItem
                        id={field.id+"_right"}
                    />

                    <NumberBoxItem
                        id={field.id+"_down"}
                    />

                    <NumberBoxItem
                        id={field.id+"_left"}
                    />

                </div>
            </div>     
        </div>
    )
};

export default SizeGroup; 