#!/usr/bin/sh

if [ "$1" = "" ]; then
    echo "Author name in kebab case is required. i.e, AlanD20"
    exit 0
fi

if [ "$2" = "" ]; then
    echo "Project name in kebab case is required. i.e, example-project"
    exit 0
fi

author_kebab_case=$1
# Shamelessly grabbed from: https://unix.stackexchange.com/a/196241
author_pascal_case=$(echo "$1" | sed -r 's/(^|-)([a-z])/\U\2/g')

package_kebab_case=$2
package_pascal_case=$(echo "$2" | sed -r 's/(^|-)([a-z])/\U\2/g')

# Replace kebab cases
find . -type f -exec sed -i "s/author-template/$author_kebab_case/g" {} +
find . -type f -exec sed -i "s/filament-package-template/$package_kebab_case/g" {} +

# Replace Pascal cases
find . -type f -exec sed -i "s/AuthorTemplate/$author_pascal_case/g" {} +
find . -type f -exec sed -i "s/FilamentPackageTemplate/$package_pascal_case/g" {} +

# Rename files
find . -type f -name "*FilamentPackageTemplate*" -exec sh -c 'mv "$1" $(echo "$1" | sed "s/FilamentPackageTemplate/$2/")' _ {} "$package_pascal_case" \;
find . -type f -name "*filament-package-template*" -exec sh -c 'mv "$1" $(echo "$1" | sed "s/filament-package-template/$2/")' _ {} "$package_kebab_case" \;

# Prepare current project
rm -rf .git init.sh

# Initialize git
git init --initial-branch main
