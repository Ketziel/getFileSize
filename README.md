# getFileSize
ModX snippet to retrieve and output the size of a given file

#Options

| Name                      | Type              | Default  Value  | Description                                                                                                                              |
| -----------------------|-----------------|-----------------|-----------------------------------------------------------------------------------------------------------------|
| filePath*                |string              | ''     | Path to the file to output the size of.                                  |
| precision               |integer            | 2     | Defines number of decimal places to use on output.    |
| unitNames               |string            | 'B,Kb,Mb,Gb,Tb'     | A comma seperated list used to define how units should display. This must always start with (B)ytes, and work it's way up.   |
| fileNotFound               |string            | 'Error : File not found'     | Error message to display if the file is not found. Set this to be empty should you want no error message to appear.   |
*Required
