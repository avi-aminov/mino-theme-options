import React from 'react';
import { useSelector } from "react-redux";

const Tabs = () => {
    const options = useSelector((state) => state.optionsReducer);
    
    return(
        <div className="option-tab-header">
            <ul>
            {
                options.options ? 
                options.options.map((option, index) => {
                    const icon = option.icon || 'ri-stack-line';
                    return (
                        <li key={index}>
                            <a className={(index == 0 ? "current" : "")} href={"#"+option.id}> 
                                <span className="icon">
                                    <i className={icon}></i>
                                </span>
                                {option.name}
                            </a>
                        </li>
                    );
                })
                : null
            }
            </ul>
        </div>
    )
};

export default Tabs;