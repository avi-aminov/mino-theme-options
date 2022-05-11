import React, { useState } from 'react';
import { useSelector, useDispatch } from "react-redux";
import { postRequest } from '../../services/Api';

const Exporter = ({field}) => {

    const import_label = field.import_label || 'Import';
    const export_label = field.export_label || 'Export';
    const import_description = field.import_description || '';
    const export_description = field.export_description || '';
    const import_content = field.import_content || '';
    const export_content = field.export_content || '';

    const [importData, setImportData] = useState("");
    const fields_data = useSelector((state) => state.dataReducer);
    const dispatch = useDispatch();

    const handleImportBackup = (event) => {
        const value = event.target.value;
        setImportData(value);
    };

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
    };

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
                        <h5>{import_label}</h5>
                        <div className="field-description">{import_description}</div>
                    </div>
                    <div className="right-col">
                        <div className="box textarea-fullwidth">
                            <div>
                                <textarea rows="4" onChange={handleImportBackup} id={field.id} name={field.id} value={importData}></textarea>
                            </div>
                            <button onClick={setImportBackup} type="button" className="btn btn-success">Import a Backup</button>
                            <div className="field-description">{import_content}</div>
                        </div>

                    </div>
                </div>
            </div>
            <div className="options-content-inner">
                <div className="grid">
                    <div className="left-col">
                        <h5>{export_label}</h5>
                        <div className="field-description">{export_description}</div>
                    </div>
                    <div className="right-col">
                        <div className="box textarea-fullwidth">
                            <div>
                                {
                                    fields_data.data ?
                                        <textarea rows="4" disabled onchange={handleImportBackup} id={field.id}
                                                  name={field.id} value={fields_data.data[field.id]}></textarea>
                                        : null
                                }
                            </div>
                            <button onClick={exportAndDownloadBackup} type="button" className="btn btn-success">Export and Download Backup</button>
                            <div className="field-description">{export_content}</div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
};

export default Exporter;