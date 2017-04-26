<?php

// Default session handler
return array(
    'handler' => 'default'
);

// PDO Session Handanler
/*return array(
    'handler' => 'pdo',
    'parameters' => array(
        'database' => 'default',
        'table_name' => 'sessions',
        'col_session_id' => 'session_id',
        'col_session_data' => 'session_data',
        'col_session_lifetime' => 'session_lifetime',
        'col_user_id' => 'user_id',
        'col_created_at' => 'created_at',
        'col_updated_at' => 'updated_at'
    )
);*/