import React from 'react';

const CustomButton = ({onClick, text, style}) => {
    return(
        <button type="button" class="btn btn-primary" onClick={onClick}>{text}</button>
    )
};

export default CustomButton;