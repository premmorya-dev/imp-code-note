################################################################################################################################################################################

grep command for searching

grep -r -i --include=\*.php '/home/robomart/web/robomart.com/public_html/'  -e "finding string"

- `grep`: The command for searching text.
- `-r`: Recursively search subdirectories.
- `-i`: Ignore case distinctions in both the search string and the input files.
- `--include=\*.php`: Specifies to only search files with the `.php` extension.
- `'/home/robomart/web/robomart.com/public_html/'`: The directory in which to search.
- `-e "finding string"`: The pattern to search for (in this case, "finding string").

So, this command will search for the string "finding string" in all `.php` files within the specified directory and its subdirectories, ignoring case distinctions.

################################################################################################################################################################################

Move a File to a Directory:
mv [OPTIONS] source destination
mv -i file.txt /path/to/destination/

################################################################################################################################################################################

Delete a Directory:
rm -r mydirectory

Delete a Directory with progress bar:



