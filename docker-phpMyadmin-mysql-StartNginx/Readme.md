This file is ready to start learning and practicing  phpMyAdmin and mysql .

1-You just Run this code on terminal:
                                     docker compose up -d


* This file is ready to start learning and practicing  phpMyAdmin and mysql .

2.You just use this credientials on phpmyadmin website:

                                    : root
                                    : arifoglu

 -------------------------------------------------------------------------

* database part

      db:
        image: mysql:latest
        volumes:
          - ./Mydatabase:/var/lib/mysql
        restart: always
        environment:
            MYSQL_ROOT_PASSWORD: arifoglu 
            MYSQL_DATABASE: db
            MYSQL_PASSWORD: arifoglu 


  * Note: If we use these passwords like this:

                              MYSQL_ROOT_PASSWORD: arifoglu 
                              MYSQL_PASSWORD: arifoglu 

   we have to define them at phpmyadmin environment like this:

                            environment:
                               PMA_HOST: db 
                               MYSQL_ROOT_PASSWORD: arifoglu 

 ------------------------------------------------------------------------------
* phpmyadmin part 

        phpmyadmin:
            depends_on:
              - db
            image: phpmyadmin/phpmyadmin
            container_name: arifoglu_phpmyadmin
            restart: always
            ports:           
              - "8081:80"
            environment:
              PMA_HOST: db 
              PMA_USER: db 
              MYSQL_ROOT_PASSWORD: arifoglu 

