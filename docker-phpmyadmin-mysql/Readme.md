* This file is ready to start learning and practicing  phpMyAdmin and mysql .

You can look at this video: https://youtu.be/lq19oMjPHG8?si=RB6FbmwY0R12Snzp 

-------------------------------------------------------------------------

1.You just Run this code on terminal:

                                     docker compose up -d
                                     
Note:when you run this command , << db_data >> file will be create on our local folder.

2.You just use this credientials on phpmyadmin website:

                                    : root
                                    : arifoglu

 -------------------------------------------------------------------------

* database part

      db:
        image: mysql:5.7
        volumes:
          - ./db_data:/var/lib/mysql
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
            restart: always
            ports:           
              - "8080:80"
            environment:
              PMA_HOST: db 
              MYSQL_ROOT_PASSWORD: arifoglu 

