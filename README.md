# MinoPress
## _Mino Theme Options Framwork_

This WordPress Plugin Theme Options Framework developed client side using:
`React.JS and Redux`
`Bootstrap 5`

![N|Solid](https://minopress.com/wp-content/uploads/2022/05/mino-theme-options-framework-view.png)

## Installation
- Download the installable WordPress plugin zip.
- Upload and active plugin from WordPress → Plugins → Add New
- After activation, you can start use the framework for configure your settings.

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
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/cb-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| content | No |  | Content text of the Field. |
| options | No |  | Oprions (key -> value) of checkBox fields |


## _Costum JavaScript / CSS Code_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/code-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| content | No |  | Content text of the Field. |


## _Color_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/color-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| content | No |  | Content text of the Field. |

Default color #ffffff

## _Date_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/date-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| content | No |  | Content text of the Field. |

## _Drop Down Box_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/ddb-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| content | No |  | Content text of the Field. |
| options | No |  | Oprions (key -> value) of drop_down_box fields |


## _Backup_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/backup-field-output-result.png)
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
| import_description | No |  | Description of Import the Field. Shown below the Import field title |
| export_description | No |  | Description of Export the Field. Shown below the Export field title |
| import_content | No |  | Content text of the Import Field. |
| export_content | No |  | Content text of the Export Field. |



## _Google Fonts_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/google-fonts-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| content | No |  | Content text of the Field. |


## _Media_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/media-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| placeholder | No |  | placeholder on media input field |
| content | No |  | Content text of the Field. |


## _Number_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/number-field-output-result-1.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| label | No | Number | Label of the field. |


## _Radio_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/radio-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| content | No |  | Content text of the Field. |


## _SelectBox_  ::TODO::
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/number-field-output-result-1.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| label | No | Number | Label of the field. |
| content | No |  | Content text of the Field. |



## _Size Group_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/Size-Group-field-output-result.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| label | No | size_group | Label of the field. |

## _Switch_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/switcher-field-output-result-e1652637572985.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| label | No | switch | Label of the field. |
| content | No |  | Content text of the Field. |


## _Textarea_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/textArea-1-e1652638788888.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| label | No | textarea | Label of the field. |
| content | No |  | Content text of the Field. |
| size | No |  half | size of textarea half or full. |




## _Time_
Field output result
![N|Solid](https://minopress.com/wp-content/uploads/2022/05/Screen-Shot-2022-05-15-at-21.28.28-e1652639338265.png)
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
| description | No |  | Description of the Field. Shown below the field title |
| label | No | time | Label of the field. |
| content | No |  | Content text of the Field. |






   [Remix Icon]: <https://remixicon.com/>
   