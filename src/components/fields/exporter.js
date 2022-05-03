import React, { useState, useEffect } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { updateData } from '../../redux/actions/data';
import { postRequest } from '../../services/Api';

const Exporter = ({field}) => {
   
    const label = field.label || '';
    const description = field.description || '';

    const [importData, setImportData] = useState("");
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleImportBackup = (event) => {
        const value = event.target.value;
        setImportData(value);
    };
    
    useEffect( () => {
        if(fields_data.data[field.id]){
            const value = fields_data.data[field.id];
            //setImportData(value);
        }
    }, fields_data );

    async function saveOptionsData(url, data) {
        //setLoader( 'Saving...' );
        try {
            const res = await postRequest(url, data);
            console.log("data: ", res);
            //setLoader( 'Save Settings' );
        } catch(error) {
            //Log errors
            console.log("error: ", error);
        }
    }

    const setImportBackup = (e) => {
        e.preventDefault();
        saveOptionsData('backup', {importData});
    }

    const exportAndDownloadBackup = () => {
        const element = document.createElement("a");
        const file = new Blob([fields_data.data[field.id]], {
            type: "text/plain"
        });
        element.href = URL.createObjectURL(file);
        element.download = "theme-options-backup.mino";
        document.body.appendChild(element);
        element.click();
    };

    return(
        <>
            <div className="options-content-inner">
                <div className="grid">
                    <div className="left-col">
                        <h5>Import</h5>
                    </div>
                    <div className="right-col">
                        <div className="box textarea-fullwidth">
                            <div>
                                <textarea rows="4" onChange={handleImportBackup} id={field.id} name={field.id} value={importData}></textarea>
                            </div>
                            <button onClick={setImportBackup} type="button" className="btn btn-success">Import a Backup</button>
                            <div class="options-filed-label" htmlFor={field.id}> 
                                {description}
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div className="options-content-inner">
                <div className="grid">
                    <div className="left-col">
                        <h5>Export</h5>
                    </div>
                    <div className="right-col">
                        <div className="box textarea-fullwidth">
                            <div>
                                <textarea rows="4" disabled onChange={ handleImportBackup } id={field.id} name={field.id} value={fields_data.data[field.id]}></textarea>
                            </div>
                            <button onClick={exportAndDownloadBackup} type="button" className="btn btn-success">Export and Download Backup</button>
                        </div>  
                    </div>
                </div>
            </div>
        </>
    )
};

export default Exporter;