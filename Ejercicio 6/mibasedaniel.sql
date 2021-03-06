PGDMP     &    )            	    y            mibasedaniel    10.18    10.18     ?
           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            ?
           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            ?
           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            ?
           1262    16403    mibasedaniel    DATABASE     ?   CREATE DATABASE mibasedaniel WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Bolivia.1252' LC_CTYPE = 'Spanish_Bolivia.1252';
    DROP DATABASE mibasedaniel;
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            ?
           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    3                        3079    12924    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            ?
           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    1            ?            1259    16419    nota    TABLE     ?   CREATE TABLE public.nota (
    ci character varying(10),
    sigla character varying(8),
    nota1 numeric(6,0),
    nota2 numeric(6,0),
    nota3 numeric(6,0),
    notafinal numeric(6,0)
);
    DROP TABLE public.nota;
       public         postgres    false    3            ?            1259    16427    persona    TABLE     ?   CREATE TABLE public.persona (
    ci character varying(10) NOT NULL,
    nombre character varying(80),
    fechanac date,
    departamento character varying(2),
    personaje character varying(10)
);
    DROP TABLE public.persona;
       public         postgres    false    3            ?            1259    16422    usuario    TABLE     ?   CREATE TABLE public.usuario (
    ci character varying(10) NOT NULL,
    usuario character varying(30),
    contrasena character varying(30)
);
    DROP TABLE public.usuario;
       public         postgres    false    3            ?
          0    16419    nota 
   TABLE DATA               I   COPY public.nota (ci, sigla, nota1, nota2, nota3, notafinal) FROM stdin;
    public       postgres    false    196   ?       ?
          0    16427    persona 
   TABLE DATA               P   COPY public.persona (ci, nombre, fechanac, departamento, personaje) FROM stdin;
    public       postgres    false    198   ?       ?
          0    16422    usuario 
   TABLE DATA               :   COPY public.usuario (ci, usuario, contrasena) FROM stdin;
    public       postgres    false    197   ?       w
           2606    16431    persona persona_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT persona_pkey PRIMARY KEY (ci);
 >   ALTER TABLE ONLY public.persona DROP CONSTRAINT persona_pkey;
       public         postgres    false    198            u
           2606    16426    usuario usuario_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (ci);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public         postgres    false    197            ?
     x?}?KN?0E??^@?I??b????nZ=???ڹ?v+KI????Ϸ?s?(???4V`?A{?%m???,?;?U?z??Sk??u?=5????????N'n?U???@?????3??qg=?ȉLV?qSY?2[???f?N??)v@\v?uȆ?Ķ3~Q??|?Wf0#g???p??????!#ȉ?!'2Y???C?????6??.?=?ZT??rZ;??`ϐ?*?&/?Cd?????T???OӘ-2ZC????t?+??)?<2tpv???c?g?̉      ?
   ?  x?U??j1?????l????4n?$
?v?#?J??h????Mӫ??oΙ3?9?V?ܥ?VO?? z?RB??p????Ah??u?q1J??%9T_??%$??;r/? e????x??<!??u???P?їi?W??0?MJ̢an?BT3?X }?c??????`?=?]?q6pGP?1J)-?H???H?b@?)Om?8??Q(?.	????i?ɾ龬? ??^/???#{???9?P? ?>???ԥdL????+h?S?A???ӗW?????	??Ԓ?)?b??2?*?????qxZ??cHg??w?"?#ζ?ȷ4?^龾?T??G?;L/~?.k??-:;Jì!_?<J<?e?????v??	?%?~@̸}????2ث??z{??<?Q??Q?Z?]q?՟?M?;|???????????n??"ï      ?
   ?   x?5?K?0D??a*?u?K7nH%?J?????(??f4O[?Aig?b???2RiQ?X??:?q??DH??z?.??e?R?Uޅ???k֫?	T?ȴum?^?J"??,+????[?y*??s??68x??r?9???ѣ5NA??k|?χ?^?A?     