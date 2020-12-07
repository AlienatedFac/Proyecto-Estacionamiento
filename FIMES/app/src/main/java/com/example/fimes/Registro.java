package com.example.fimes;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

    public class Registro extends AppCompatActivity {

        RequestQueue requestQueue;
        Button registrar, imagen;
        EditText matricula, contrasena, nombre, apellido, correo;
        String tipo="usuario";
        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_registro);
            matricula = findViewById(R.id.editText);
            contrasena = findViewById(R.id.editText2);
            nombre = findViewById(R.id.editText3);
            apellido = findViewById(R.id.editText4);
            correo = findViewById(R.id.editText5);
            imagen = findViewById(R.id.button4);
            registrar = findViewById(R.id.button5);
            registrar.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {
                    ejecutarServicio("https://fimeses.000webhostapp.com/app/registro.php");
                }
            });
        }
        private void ejecutarServicio(String URL){
            StringRequest stringRequest=new StringRequest(Request.Method.POST, URL, new Response.Listener<String>() {
                @Override
                public void onResponse(String response) {
                    Toast.makeText(getApplicationContext(), "REGISTRO EXITOSO", Toast.LENGTH_SHORT).show();
                    limpiarFormulario();
                    Intent welcome = new Intent(Registro.this, MainActivity.class);
                    startActivity(welcome);
                }
            }, new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    Toast.makeText(getApplicationContext(), error.toString(),Toast.LENGTH_SHORT).show();
                }
            }){
                @Override
                protected Map<String, String> getParams() throws AuthFailureError {
                    Map<String,String> parametros=new HashMap<String, String>();

                    parametros.put("id", matricula.getText().toString());
                    parametros.put("contrasena", contrasena.getText().toString());
                    parametros.put("nombre", nombre.getText().toString());
                    parametros.put("apellido", apellido.getText().toString());
                    parametros.put("correo", correo.getText().toString());
                    parametros.put("tipo", tipo);

                    return parametros;
                }
            };
            requestQueue= Volley.newRequestQueue(Registro.this);
            requestQueue.add(stringRequest);
        }
        private void limpiarFormulario(){

            matricula.setText("");
            contrasena.setText("");
            nombre.setText("");
            apellido.setText("");
            correo.setText("");
        }
    }

