import React from 'react';

const AlertMessage = () => {
    return(
        <div className="alert alert-success" role="alert">
            <h4 className="alert-heading">Well done!</h4>
            <p>In order to use our framework,
                you first need to enter the parameters in the function.php file you want to edit</p>
            <hr />
            <p className="mb-0">To watch a video guide on the use of our framework,
                click here</p>
        </div>
    )
};

export default AlertMessage;