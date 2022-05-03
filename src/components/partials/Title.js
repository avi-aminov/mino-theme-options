import React from 'react';

const Title = ({field}) => {
    const title = field.title || '';
    const description = field.description || '';

    return(
        <div class="header">
            <h4>{title}</h4>
            <p>{description}</p>
        </div>
    )
};

export default Title;