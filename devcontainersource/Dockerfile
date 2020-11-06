# See here for image contents: https://github.com/microsoft/vscode-dev-containers/tree/v0.134.0/containers/php/.devcontainer/base.Dockerfile
ARG VARIANT="7"
FROM mcr.microsoft.com/vscode/devcontainers/php:0-${VARIANT}
 
# [Optional] Install a version of Node.js using nvm for front end dev
ARG INSTALL_NODE="true"
ARG NODE_VERSION="lts/*"
RUN if [ "${INSTALL_NODE}" = "true" ]; then su vscode -c "source /usr/local/share/nvm/nvm.sh && nvm install ${NODE_VERSION} 2>&1"; fi

# [Optional] Uncomment this line to install global node packages.
# RUN su vscode -c "source /usr/local/share/nvm/nvm.sh && npm install -g <your-package-here>" 2>&1

# Configure apt and install packages
RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
    && apt-get -y install --no-install-recommends zip apt-utils dialog 2>&1 \
    #
    # Install git, procps, lsb-release (useful for CLI installs)
    && apt-get -y install --no-install-recommends  git procps iproute2 lsb-release \
  
    # Clean up
    && apt-get autoremove -y \
    && apt-get clean -y \
    && rm -rf /var/lib/apt/lists/*

RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
    && apt-get -y install --no-install-recommends wget \
    && wget https://raw.githubusercontent.com/composer/getcomposer.org/master/web/installer -O - -q | php \
    && mv composer.phar /usr/local/bin/composer

# RUN wget -O phpunit https://phar.phpunit.de/phpunit-9.phar \
#     && chmod +x phpunit \
#     && mv phpunit /usr/local/bin/phpunit

RUN wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

RUN COMPOSER_MEMORY_LIMIT=-1 composer global require squizlabs/php_codesniffer

# RUN rm -Rf vendor \
#     && COMPOSER_MEMORY_LIMIT=-1 composer require symfony/flex \
#     && COMPOSER_MEMORY_LIMIT=-1 composer require routing orm symfony/dotenv yaml annotations form validator security-csrf \
#     && COMPOSER_MEMORY_LIMIT=-1 composer require --dev server debug symfony/maker-bundle symfony/phpunit-bridge \
#     && COMPOSER_MEMORY_LIMIT=-1 composer require --dev symfony/browser-kit symfony/css-selector \
#     && COMPOSER_MEMORY_LIMIT=-1 composer install 

# RUN composer require --dev phpunit/phpunit ^9

