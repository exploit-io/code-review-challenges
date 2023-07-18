

--     ===>   !BLACK BOARD!


--            md5(111) = 698d51a19d8a121ce581499d7b701668

-- DB Table: users
--  ---------------------------------------------------
-- | ID | USERNAME | PASSWORD                          |
--  ---------------------------------------------------
-- |  0 |    admin | 99bee1c5411a242220ceaa5159586117  |
--  ---------------------------------------------------


--   HTTP POST REQUEST
-- username: 
-- password:

-- Our Query
SELECT password FROM users WHERE username="$username$";