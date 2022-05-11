# MinoPress
## _Mino Theme Options Framwork_

This free theme options framework developed client side using:
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
    $minoOB->set_group([
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
    $minoOB->set_fields_to_group('group-example-id',[
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
    $minoOB->set_fields_to_group('group-example-id',[
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
    $minoOB->set_fields_to_group('group-example-id',[
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
    $minoOB->set_fields_to_group('group-example-id',[
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











As [John Gruber] writes on the [Markdown site][df1]

> The overriding design goal for Markdown's
> formatting syntax is to make it as readable

## License

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [Remix Icon]: <https://remixicon.com/>




npm install

composer install

npm start


// after add new php class need run this line
composer dump-autoload -o 