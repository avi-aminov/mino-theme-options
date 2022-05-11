import React from 'react';

import Title from '../partials/Title';
import Media from '../fields/Media';
import TextInput from '../fields/TextInput';
import Number from '../fields/Number';
import Switch from '../fields/Switch';
import TextArea from '../fields/TextArea';
import SelectBox from '../fields/SelectBox';
import DropDownBox from '../fields/DropDownBox';
import SizeGroup from '../fields/SizeGroup';
import Color from '../fields/Color';
import Code from '../fields/Code';
import Exporter from '../fields/exporter';
import Fonts from '../fields/Fonts';
import Date from '../fields/Date';
import Time from '../fields/Time';
import Radio from '../fields/Radio';
import Checkbox from '../fields/CheckBox';

const DrawFieldComponents = (field) => {

    const setComponent = (field) => {
        switch (field.type) {
            case 'title':
                return <Title field={field} />;
            case 'media':
                return <Media field={field} />;
            case 'text':
                return <TextInput field={field} />;
            case 'number':
                return <Number field={field} />;
            case 'switch':
                return <Switch field={field} />;
            case 'textarea':
                return <TextArea field={field} />;
            case 'select_box':
                return <SelectBox field={field} />;
            case 'drop_down_box':
                return <DropDownBox field={field} />;
            case 'size_group':
                return <SizeGroup field={field} />;
            case 'color':
                return <Color field={field} />;
            case 'code':
                return <Code field={field} />;
            case 'backup':
                return <Exporter field={field} />;
            case 'font':
                return <Fonts field={field}/>;
            case 'date':
                return <Date field={field}/>;
            case 'time':
                return <Time field={field}/>;
            case 'radio':
                return <Radio field={field}/>;
            case 'checkbox':
                return <Checkbox field={field}/>;
            default:
                break;
        }
    };

    return(
        setComponent(field)
    )
};

export default DrawFieldComponents;