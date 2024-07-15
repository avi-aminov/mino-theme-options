# MinoPress

# Developer Version

## for use this version be sure you are installed dependencies

<code> npm install </code>
<br>
<code> composer install </code>
<br>
_After installing dependencies, run build command_
<br>
<code>npm run build</code>
<br>
<br>

## _Mino Theme Options Framwork_

This WordPress Plugin Theme Options Framework developed client side using:
`React.JS, Redux and `
`Bootstrap 5`

![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/1.png)

## Installation

-   Download the installable WordPress plugin zip.
-   Upload and active plugin from WordPress → Plugins → Add New
-   After activation, you can start use the framework for configure your settings.

## -- Fields --

## _Group_

Before creating fields you need to create a group

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_group([
        'id' => 'group-example-id',
        'name' => 'Example Group',
        'icon' => 'ri-archive-drawer-line'
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| name | No | Group | Name of the Group. |
| icon | No | ri-stack-line | See full list of icons [Remix Icon] |

## _CheckBox_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/2.png)
Add checkbox field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'checkbox',
            'id' => 'checkbox-example-id',
            'label' => 'Checkbox Label',
            'description' => 'Checkbox Description',
            'content' => 'It has survived not only five centuries, but also the leap into electronic typesetting, Lorem Ipsum.',
            'options' => [
                [
                    'key' => 'checkbox_1',
                    'value' => 'checkbox 1',
                ],
                [
                    'key' => 'checkbox_2',
                    'value' => 'checkbox 2',
                ]
            ]
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (checkbox) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| label | No | checkbox | Label of the field. |
| description | No | | Description of the Field. Shown below the field title |
| content | No | | Content text of the Field. |
| options | No | | Oprions (key -> value) of checkBox fields |

## _Costum JavaScript / CSS Code_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/3.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'code',
            'id' => 'custom-js-code',
            'label' => 'Custom JavaScript',
            'description' => 'Example Description',
            'content' => 'It has survived not only five centuries, but also the leap into electronic typesetting.',
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (code) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| label | No | code | Label of the field. |
| description | No | | Description of the Field. Shown below the field title |
| content | No | | Content text of the Field. |

## _Color_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/4.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'color',
            'id' => 'color-field-example',
            'label' => 'Color Field',
            'description' => 'Choose your color',
            'content' => 'It has survived not only five centuries, but also the leap into electronic typesetting.',
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (color) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| label | No | color | Label of the field. |
| description | No | | Description of the Field. Shown below the field title |
| content | No | | Content text of the Field. |

Default color #ffffff

## _Date_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/5.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'date',
            'id' => 'date-field-example',
            'label' => 'Date Field Label',
            'format' => 'MM/dd/yyyy',
            'description' => 'Date Field Description',
            'content' => 'It has survived not only five centuries, but also the leap into electronic typesetting.',
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (color) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| label | No | date | Label of the field. |
| format | No | 'dd/MM/yyyy' | date format |
| description | No | | Description of the Field. Shown below the field title |
| content | No | | Content text of the Field. |

## _Drop Down Box_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/6.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'drop_down_box',
            'id' => 'drop-down-box-example',
            'label' => 'Drop Down Box',
            'description' => "Boxed or Fullwidth? Choose your site layout width. Default : Full Width",
            'content' => 'It has survived not only five centuries, but also the leap into electronic typesetting.',
            'options' => [
                [
                    'key' => 'ddb_1',
                    'value' => 'Drop Down Box 1',
                ],
                [
                    'key' => 'ddb_2',
                    'value' => 'Drop Down Box 2',
                ],
                [
                    'key' => 'ddb_3',
                    'value' => 'Drop Down Box 3',
                ]
            ]
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (drop_down_box) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| label | No | Drop Down Box | Label of the field. |
| description | No | | Description of the Field. Shown below the field title |
| content | No | | Content text of the Field. |
| options | No | | Oprions (key -> value) of drop_down_box fields |

## _Backup_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/7.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'backup',
            'id' => 'backup-example',
            'import_label' => 'Backup Import Label',
            'export_label' => 'Backup Export Label',
            'import_description' => 'Backup Import Description',
            'export_description' => 'Backup Export Description',
            'import_content' => 'Backup Import Content',
            'export_content' => 'Backup Export Content'
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (backup) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| import_label | No | Import | Import Label of the field. |
| export_label | No | Export | Export Label of the field. |
| import_description | No | | Description of Import the Field. Shown below the Import field title |
| export_description | No | | Description of Export the Field. Shown below the Export field title |
| import_content | No | | Content text of the Import Field. |
| export_content | No | | Content text of the Export Field. |

## _Google Fonts_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/8.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'font',
            'id' => 'fonts-example',
            'description' => "Google Font Description",
            'content' => 'Google Font Content',
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (font) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| description | No | | Description of the Field. Shown below the field title |
| content | No | | Content text of the Field. |

## _Media_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/9.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'media',
            'id' => 'media-example',
            'label' => 'Default Logo',
            'description' => 'Upload your default logo here. If you not upload, then site title will load in this logo location.',
            'placeholder' => 'Upload your default logo',
            'content' => 'Media Content'
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (media) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| description | No | | Description of the Field. Shown below the field title |
| placeholder | No | | placeholder on media input field |
| content | No | | Content text of the Field. |

## _Number_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/10.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'number',
            'id' => 'number-example',
            'label' => 'Number Label',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (number) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| description | No | | Description of the Field. Shown below the field title |
| label | No | Number | Label of the field. |

## _Radio_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/11.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'radio',
            'label' => 'Radio Label',
            'id' => 'radio-example',
            'description' => 'Radio Description',
            'content' => 'Radio Content',
            'options' => [
                [
                    'key' => 'radio_1',
                    'value' => 'radio 1',
                ],
                [
                    'key' => 'radio 2',
                    'value' => 'radio 2',
                ]
            ]
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (radio) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| label | No | radio | Label of the field. |
| description | No | | Description of the Field. Shown below the field title |
| content | No | | Content text of the Field. |

## _SelectBox_ ::TODO::

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/12.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'number',
            'id' => 'number-example',
            'label' => 'Number Label',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (number) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| description | No | | Description of the Field. Shown below the field title |
| label | No | Number | Label of the field. |
| content | No | | Content text of the Field. |

## _Size Group_

Field output result
-- NEED TO ADD IMAGE --
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'size_group',
            'id' => 'size-group-example',
            'label' => 'Size Group Label',
            'description' => 'output example: 10px 10px 10px 10px',
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (size_group) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| description | No | | Description of the Field. Shown below the field title |
| label | No | size_group | Label of the field. |

## _Switch_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/14.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'id' => 'switch-example',
            'type' => 'switch',
            'label' => 'switch example',
            'description' => 'switch description example',
            'content' => 'switch content example',
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (switch) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| description | No | | Description of the Field. Shown below the field title |
| label | No | switch | Label of the field. |
| content | No | | Content text of the Field. |

## _Textarea_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/15.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'textarea',
            'label' => 'Textarea',
            'id' => 'textarea-example',
            'description' => 'Textarea description example',
            'content' => 'Textarea content example',
            'size' => 'full'
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (textarea) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| description | No | | Description of the Field. Shown below the field title |
| label | No | textarea | Label of the field. |
| content | No | | Content text of the Field. |
| size | No | half | size of textarea half or full. |

## _Time_

Field output result
![N|Solid](https://raw.githubusercontent.com/avi-aminov/mino-theme-options/main/preview/16.png)
Add code field to group id for example: `group-example-id`

```sh
if(class_exists('MinoOptionsBuilder')){
    $minoThemeOptions->set_fields_to_group('group-example-id',[
        [
            'type' => 'time',
            'label' => 'Time Label',
            'id' => 'time-example',
            'description' => 'Time description example',
            'content' => 'Time content example',
        ]
    ]);
}
```

Arguments
| Name (Key) | Mandatory | Default | Description |
| ------ | ------ | ------ | ------ |
| type | Yes | | field type (time) |
| id | Yes | | A unique ID. This ID will be used to get the value.|
| description | No | | Description of the Field. Shown below the field title |
| label | No | time | Label of the field. |
| content | No | | Content text of the Field. |

[Remix Icon]: https://remixicon.com/