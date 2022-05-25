import React from 'react';

const AlertMessage = () => {
    return(
        <div className="alert alert-success m-4" role="alert">
            <h4 className="alert-heading">Welcome to Mino Theme Options Framework</h4>
            <p>The theme option is ready to start create custom fields options</p>
            <hr />
            <p className="mb-0">To see guide on the use of our framework,
                <a target="_blank" href="https://github.com/avi-aminov/mino-theme-options"> click here</a> </p>
        </div>
    )
};

export default AlertMessage;