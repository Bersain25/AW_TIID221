# 1. Importamos request junto con Flask y render_template
from flask import Flask, render_template, request
from werkzeug.security import generate_password_hash

# Creamos una instancia de nuestra app
app = Flask(__name__)

# Configuracion de la conexion
app.config['MYSQL_HOST'] = 'LocalHost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'FlaskDB'

# Permite que Flask vuelva a cargar las plantilas cuando se modifican
app.config['TEMPLATES_AUTO_RELOAD'] = True
app.secret_key = 'mysecretkey'


# Ruta raiz
@app.route("/")
def home():
    return render_template("login.html")

# 2. Corregido "methods" en plural
@app.route("/registro", methods=["GET", "POST"])
def registro():
    if request.method == "POST":
        nombre = request.form["nombre"]
        apellido_p = request.form["apellido_p"]
        apellido_m = request.form["apellido_m"]
        correo = request.form["correo"]
        password_hash = request.form["password_hash"]
        id_rol = request.form["id_rol"]

        # 3. Corregido el nombre de la función generate_password_hash
        password_hasheada = generate_password_hash(password_hash)

    return render_template("registro.html") # Asegúrate de retornar una vista o redirección en GET/POST

# 4. El bloque del servidor fuera de la función
if __name__ == "__main__":
    app.run(port=5000, debug=True)