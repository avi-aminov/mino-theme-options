import React from 'react';
import DrawFieldComponents from '../helper/DrawFieldComponents';
import { useSelector } from "react-redux";

const TabContent = () => {
    const options = useSelector((state) => state.optionsReducer);
    
    return(
        <div className="tab-body option-tab-content" id="nav-tabContent">
        {
            options.options ? 
            options.options.map((option, index) => {
                return (
                    <div className={(index == 0 ? ' active '  : ' disable ') + 'content-body-grid'} id={option.id} key={index}>
                        { 
                        option.fields ? 
                        option.fields.map((field) => { return DrawFieldComponents( field ) }) : null
                        }
                    </div>
                );
            })
            : null
        }  
        </div>
    )
};

export default TabContent;