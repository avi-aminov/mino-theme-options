import React from 'react';
import logo from '../../../assets/images/logo.png'; 

const PanelHeader = ({loader}) => {
    return(
        <div className="option-panel-header">
            <div className="logo-area">
                <div className="logo">
                    <img src={logo} alt="logo" />
                </div>
                <h3>Theme Options</h3>
            </div>
            <div className="header-info">
                <div className="text">
                    <p>MinoPress Theme Options,
                        <a className='doc-link' target='_blank' href='https://github.com/avi-aminov/mino-theme-options'> See full Documentions</a>
                    </p>
                </div>
                <div className="btns">
                    <button type="submit" className="options-theme-btn">{ loader }</button>
                    <button type="button" className="options-theme-btn-s2">Reset to default</button>
                </div>
            </div>
        </div>
    )
};

export default PanelHeader;