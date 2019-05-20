**WPDOM**

Very simple plugin for manipulating the DOM. Use this as a last resort plugin, when there is no better alternative.


**How to use:**

Filter a specific page (page with ID 1):
`add_filter('wpdom_output_1', function($output){ 
return $output
},0);`

Filter any page:
`add_filter('wpdom_output', function($output){ 
return $output
},0);`


Make sure they have priority 0.