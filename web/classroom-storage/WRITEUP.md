The txt files to be read are requested from the server through the argument passed to `path` of the notes `route`.
For example, the request for the `2019_11_10.txt` file contained in the `SNP` directory is possible via the URL `http://localhost:5004/notes?path=lectures/SNP/2019_11_10.txt`.
If the given path is a directory instead of a text file, the contents are listed. That said, you can change the value of `path` to point to any directory on the server.
For example, if the flag is contained in the `flag.txt` file of the `confidential` directory, it can be accessed via the URL `http://localhost:5004/notes?path=confidential/flag.txt`
