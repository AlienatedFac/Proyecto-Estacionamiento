package com.example.fimeestacionamiento;

import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.support.v7.app.AppCompatActivity;
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
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.Hashtable;
import java.util.Map;

public class MainActivity extends AppCompatActivity {
    RequestQueue requestQueue;
    EditText edtMatricula, edtContrasena;
    Button btnLogin, btnRegistrar;
    String usuario,contrasena,idUsuario;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        edtMatricula = findViewById(R.id.edtMatricula);
        edtContrasena = findViewById(R.id.edtContrasena);
        btnLogin = findViewById(R.id.btnLogin);
        btnLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                buscarUsuario("https://fimeses.000webhostapp.com/app/login.php?usuario=" + edtMatricula.getText()+"");
            }
        });
        btnRegistrar = findViewById(R.id.btnRegistrar);
        btnRegistrar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent welcome = new Intent(MainActivity.this, Registro.class);
                startActivity(welcome);
            }
        });
    }
    private void buscarUsuario(String URL){
        JsonArrayRequest jsonArrayRequest = new JsonArrayRequest(URL, new Response.Listener<JSONArray>() {
            @Override
            public void onResponse(JSONArray response) {
                JSONObject jsonObject = null;
                for (int i = 0; i < response.length(); i++) {
                    try {

                        jsonObject = response.getJSONObject(i);
                        usuario = jsonObject.getString("id");
                        contrasena = jsonObject.getString("contrasena");
                        String U = usuario;

                        if(usuario.equals(edtMatricula.getText().toString()) && contrasena.equals(edtContrasena.getText().toString()))
                        {
                            Toast.makeText(MainActivity.this, "Bienvenido ID: "+ U, Toast.LENGTH_SHORT).show();
                            Intent welcome = new Intent(MainActivity.this, Menu.class);
                            startActivity(welcome);
                            break;
                        }
                        Toast.makeText(MainActivity.this, "Usuario o contraseña invalida", Toast.LENGTH_SHORT).show();
                    } catch (JSONException e) {
                        Toast.makeText(getApplicationContext(), e.getMessage(), Toast.LENGTH_SHORT).show();
                    }
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(getApplicationContext(), "" + error,Toast.LENGTH_LONG).show();
            }
        }
        );
        requestQueue = Volley.newRequestQueue(this);
        requestQueue.add(jsonArrayRequest);
    }
}
