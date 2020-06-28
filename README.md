

##  procediminetos

  1. clone el repostorio.
  2. comoser install
  3. configure .env
  4. php artisan migrate --seed
  5. importe los medicamentos .xlsx a su motor de base de datos.
  6. configure su servidor php.ini 
        
        ;;;;;;;;;;;;;;;;;;;
        ; Resource Limits ;
        ;;;;;;;;;;;;;;;;;;;

        ; Maximum execution time of each script, in seconds
        ; http://php.net/max-execution-time
        ; Note: This directive is hardcoded to 0 for the CLI SAPI
        max_execution_time = 360000

        ; Maximum amount of time each script may spend parsing request data. It's a good
        ; idea to limit this time on productions servers in order to eliminate unexpectedly
        ; long running scripts.
        ; Note: This directive is hardcoded to -1 for the CLI SAPI
        ; Default Value: -1 (Unlimited)
        ; Development Value: 60 (60 seconds)
        ; Production Value: 60 (60 seconds)
        ; http://php.net/max-input-time
        max_input_time = 600

        ; Maximum input variable nesting level
        ; http://php.net/max-input-nesting-level
        ;max_input_nesting_level = 64

        ; How many GET/POST/COOKIE input variables may be accepted
        ; max_input_vars = 1000

        ; Maximum amount of memory a script may consume (128MB)
        ; http://php.net/memory-limit
        memory_limit = 4096M
        
   7. npm i 
   8. npm run dev
   9. php artisan serve 
   10. login user: admin@admin.com  password: 12345678.
   
   


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
