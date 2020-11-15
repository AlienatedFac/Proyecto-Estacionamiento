<!DOCTYPE html>
<?php 
session_start()
?>
<html lang="es">
<head>    
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="shortcut icon" href="assets/ico/favicon.ico">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
   <script src="bootstrap-3.3.7/js/jQuery-2.1.4.min.js"></script>
   <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
   <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
   <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
   <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
   <meta charset="UTF-8">
   <meta http-equiv="Content-type" content="text/html; charse=iso-8859-1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">
  </head>
 
 
<body>
<div id="Principal">
   <!-------------Area de trabajo------------>
   <div id="Secundario">
   
   <!-------------Cabecera------------>
    <div id="Header">
	<?php include("include/Cabecera.php");?>
	</div>
	 <!-------------Menu------------>
	<div id="Menu">
	<?php include("include/Menu.php");?>
	</div>
	 <!-------------Contenedor------------>
	<div id="Contenedor">
	
	  <div id="Citas"> 
	    <center><h1>Estacionamiento</h1></center>

	    <center><h1>Reservar cajón</h1></center>
		<?php
			 
	 ini_set('date.timezone','America/Monterrey');
	 $Time=date("H:i");   
	 $Date=date('d-m-Y');
	 
	 ?>
		
		<form action="Guardar_Nuevo_Producto.php" method="post">
		
				<center><h6>Número de cajón<br><select type="text" name="Numero de cajon" value= ""><br>
				
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
				<option>13</option>
				<option>14</option>
				<option>15</option>
				<option>16</option>
				<option>17</option>
				<option>18</option>
				<option>19</option>
				<option>20</option>
				<option>21</option>
				<option>22</option>
				<option>23</option>
				<option>24</option>
				<option>25</option>
				<option>26</option>
				<option>27</option>
				<option>28</option>
				<option>29</option>
				<option>30</option>
				<option>31</option>
				<option>32</option>
				<option>33</option>
				<option>34</option>
				<option>35</option>
				<option>36</option>
				<option>37</option>
				<option>38</option>
				<option>39</option>
				<option>40</option>
				<option>41</option>
				<option>42</option>
				<option>43</option>
				<option>44</option>
				<option>45</option>
				<option>46</option>
				<option>47</option>
				<option>48</option>
				<option>49</option>
				<option>50</option>
				<option>51</option>
				<option>52</option>
				<option>53</option>
				<option>54</option>
				<option>55</option>
				<option>56</option>
				<option>57</option>
				<option>58</option>
				<option>59</option>
				<option>60</option>
				<option>61</option>
				<option>62</option>
				<option>63</option>
				<option>64</option>
				<option>65</option>
				<option>66</option>
				<option>67</option>
				<option>68</option>
				<option>69</option>
				<option>70</option>
				<option>71</option>
				<option>72</option>
				<option>73</option>
				<option>74</option>
				<option>75</option>
				<option>76</option>
				<option>77</option>
				<option>78</option>
				<option>79</option>
				<option>80</option></select><br>
				Hora de llegada: <br> <input type="time" name="Hora" value="<?php echo $Llegada ?>"><br>
				Hora de salida: <br> <input type="time" name="Hora" value="<?php echo $Salida ?>"><br>
				
				
			
				
				<br>
				<input type="submit" value="Guardar" class="btn btn-danger btn-primary">
	      </form>

	  
   

</body>





