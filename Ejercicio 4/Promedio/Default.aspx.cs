using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using MySql.Data.MySqlClient;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        MySqlConnection con = new MySqlConnection ();
        MySqlDataAdapter ada = new MySqlDataAdapter();
        DataSet ds = new DataSet();
        con.ConnectionString = "Server=localhost;UserID=usuario324;Database=mibasedaniel;Password=123456;";
        ada.SelectCommand = new MySqlCommand();
        ada.SelectCommand.Connection = con;
        ada.SelectCommand.CommandText = "SELECT AVG(CASE departamento WHEN '01' THEN n.notafinal end) Chuquisaca, AVG(CASE departamento WHEN '02' THEN n.notafinal end) as LaPaz, AVG(CASE departamento WHEN '03' THEN n.notafinal end) Cochabamba, AVG(CASE departamento WHEN '04' THEN n.notafinal ELSE 0 end) Oruro, AVG(CASE departamento WHEN '05' THEN n.notafinal ELSE 0 end) Potosi, AVG(CASE departamento WHEN '06' THEN n.notafinal end) Tarija, AVG(CASE departamento WHEN '07' THEN n.notafinal end) SantaCruz, AVG(CASE departamento WHEN '08' THEN n.notafinal ELSE 0 end) Beni, AVG(CASE departamento WHEN '09' THEN n.notafinal ELSE 0 end) Pando FROM persona p, nota n where p.ci = n.ci";
        ada.Fill(ds);
        GridView1.DataSource = ds.Tables[0];
        GridView1.DataBind();
    }
}