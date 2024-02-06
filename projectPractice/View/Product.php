<?php
class View_Product
{
    public function __construct()
    {

    }

    public function createForm()
    {
        $form = '<form action="" method="POST">';
            $form .= "<h2>Product Form</h2>";
        	$form .= '<div>';
	        	$form .= $this->creteTextField('group1[product_name]', "Product Name: ");
	        $form .= '</div>';
	        $form .= '<div>';
            $form .= $this->creteTextField('group1[sku]', "Sku: ");
	        $form .= '</div>';
        	$form .= '<div>';
	        	$form .= $this->creteRadio('group1[Product_type]', "Product Type: ", "Simple", "simple", true);
	        	$form .= $this->creteRadio('group1[Product_type]', " ", "Bundle", "bundle");
                $form .= "<br><br>";
	        $form .= '</div>';
	        $form .= '<div>';
                $options=['bar&game_room' => 'Bar & Game Room',
                'bedroom'=>'Bedroom',
                'decor'=>'Decor',
                'dining&kitchen'=>'Dining & Kitchen',
                'lightning'=>'Lightning',
                'living_room'=>'Living Room',
                'mattresses'=>'Mattresses',
                'office'=>'Office',
                'outddor'=>'Outdoor'];
	        	$form .= $this->createCategory('group1[category]', "Category: ", $options, '');
	        $form .= '</div>';
            $form .= '<div>';
                $form .= $this->creteTextField('group1[manufacture_cost]', "Manufacture Cost: ");
            $form .= '</div>';
	        $form .= '<div>';
            $form .= $this->creteTextField('group1[shipping_cost]', "Shipping Cost: ");
	        $form .= '</div>';
	        $form .= '<div>';
            $form .= $this->creteTextField('group1[total_cost]', "Total Cost: ");
	        $form .= '</div>';
	        $form .= '<div>';
            $form .= $this->creteTextField('group1[price]', "Price: ");
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->createCategory('group1[status]', "Status: ", $options=['enabled'=>"Enabled", 'disabled'=>"Disabled"],'status');
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->createDate('group1[date_created]', 'Created At');
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->createDate('group1[date_updated]', 'Updated At');
	        $form .= '</div>';
	        $form .= '<div>';
	        	$form .= $this->creteSubmitBtn('Submit');
	        $form .= '</div>';
		$form .= '</form>';
		return $form;
    }

    public function creteTextField($name, $title, $value = '', $id = '')
    {
        return '<span> ' . $title . ' </span><input id="' . $id . '" type="text" name="' . $name . '" value="' . $value . '"><br><br>';
    }
    
    public function creteRadio($name, $title, $value = '', $id = '', $selected=false)
    {
        $radioButton = '<span> ' . $title . ' </span><input id="' . $id . '" type="radio" name="' . $name . '" value="' . $value . '"';
        if($selected){
            $radioButton .= 'checked';    
        }
        $radioButton .= '> <label for="'.$id.'">' . $value . '</label>';
        return $radioButton;
    }

    public function createCategory($name, $title, $options, $id, $selected=false){
        $category = '<span> ' . $title . ' </span><select name="' . $name . '" id="' . $id . '">';
        foreach($options as $value => $label){
            $category .= '<option value="'.$value.'"> '.$label.' </option>';
            if($selected){$category.='selected';}
        }
        $category .= '</select><br><br>';
        return $category;
    }

    public function createDate($name, $title){
        $date = '<span> ' . $title . ' </span><input id="' . $name . '" type="date" name="' . $name . '"> <br><br> ';
        return $date;
    }

    public function creteSubmitBtn($title)
    {
        return '<input type="submit" name="submit" value="'.$title.'">';
    }

    public function toHtml()
    {
    	return $this->createForm();
    }
}