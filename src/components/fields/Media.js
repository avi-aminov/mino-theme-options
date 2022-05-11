import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';
import _ from 'lodash'

const Media = ({field}) => {
    _.noConflict();
    let frame;

    const placeholder = field.placeholder || '';
    const label = field.label || '';
    const description = field.description || '';
    const content = field.content || '';

    const [imagePath, setImagePath] = useState('');
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    useEffect( () => {
        if(fields_data.data && fields_data.data[field.id]){
            const img = fields_data.data[field.id].toString();
            setImagePath(img);
        }
    }, [fields_data]);

    const handleInputChange = (k, v) => {
        dispatch(updateData({key:k, value:v}));
    };

    const runUploader = (event) => {
        event.preventDefault();

        // If the media frame already exists, reopen it.
        if (frame) {
            frame.open();
            return
        }
    
        // Create a new media frame
        frame = wp.media({
            title: 'Select or Upload Media Of Your Chosen Persuasion',
            button: {
                text: 'Use this media',
            },
            multiple: false,
        });
    
        /* frame.on('close', () => { }) */
        
        frame.on( 'select', () => {
            const state = frame.state();
            const selection = state.get('selection');
            if ( ! selection ) return;
            selection.each( (attachment) => {
                handleInputChange(field.id, attachment.attributes.url);
                setImagePath(attachment.attributes.url);
            });
        });

        // Finally, open the modal on click
        frame.open();   
    };

    const clearMediaPath = () => {
        handleInputChange(field.id, '');
        setImagePath('');
    };

    return(
        <div className="options-content-inner">
            <div className="grid">
                <div className="left-col">
                    <h5>{label}</h5>
                    <div className="field-left-description">{ description }</div>
                </div>
                <div className="right-col">
                    <div className="box image-upload-box">
                        <div className="image-file-upload">
                            <div className="input-with-upload-btn">
                                <input placeholder={placeholder} type="text" className="upload-url-show-area" value={imagePath} /> 
                                <button className="file-upload-btn" type="button" onClick={runUploader}>
                                    <i className="ri-gallery-upload-line"></i>
                                </button>
                            </div>
                            {
                                imagePath ? 
                                <div className="file-upload-content">
                                    <img src={imagePath} className="file-upload-image" alt="media image"/>
                                    <div className="image-title-wrap">
                                        <button type="button" onClick={clearMediaPath} className="remove-image">
                                            <i className="ri-close-circle-fill"></i>
                                        </button>
                                    </div>
                                </div>
                                : "" 
                            }
                        </div>
                        <div className="field-left-description">{ content }</div>
                    </div>  
                </div>
            </div>
        </div> 
    )
};

export default Media;