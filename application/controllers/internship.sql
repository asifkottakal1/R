SELECT tab.table_name,food.food_name,cust.customer_name
FROM rms_table_details tab
INNER JOIN rms_order_details ord_det ON ord_det.table_id = tab.table_id
INNER JOIN rms_food_details food on food.food_id = ord_det.food_id
INNER JOIN rms_customer_details cust on cust.customer_id = ord_det.customer_id;






SELECT food.food_name,cust.customer_name,food.prize,food.GST
FROM rms_food_details tab
INNER JOIN rms_order_details orde ON ord_det.table_id = tab.table_id
INNER JOIN rms_food_details food on food.food_id = ord_det.food_id
INNER JOIN rms_customer_details cust on cust.customer_id = ord_det.customer_id;
