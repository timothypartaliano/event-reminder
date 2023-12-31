PGDMP     %                    {            testing    14.3    14.3 L    O           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            P           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            Q           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            R           1262    16412    testing    DATABASE     k   CREATE DATABASE testing WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_United States.1252';
    DROP DATABASE testing;
                postgres    false            �            1259    16993    events    TABLE     �  CREATE TABLE public.events (
    id bigint NOT NULL,
    title character varying(255) NOT NULL,
    description character varying(255) NOT NULL,
    date date NOT NULL,
    start_hour character varying(255) NOT NULL,
    end_hour character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status integer,
    location_id bigint
);
    DROP TABLE public.events;
       public         heap    postgres    false            �            1259    16992    events_id_seq    SEQUENCE     v   CREATE SEQUENCE public.events_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.events_id_seq;
       public          postgres    false    219            S           0    0    events_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.events_id_seq OWNED BY public.events.id;
          public          postgres    false    218            �            1259    16969    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    16968    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    215            T           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    214            �            1259    17003 	   locations    TABLE       CREATE TABLE public.locations (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    description character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status integer
);
    DROP TABLE public.locations;
       public         heap    postgres    false            �            1259    17002    locations_id_seq    SEQUENCE     y   CREATE SEQUENCE public.locations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.locations_id_seq;
       public          postgres    false    221            U           0    0    locations_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.locations_id_seq OWNED BY public.locations.id;
          public          postgres    false    220            �            1259    16945 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    16944    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    210            V           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    209            �            1259    16962    password_resets    TABLE     �   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            �            1259    16981    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    16980    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    217            W           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    216            �            1259    17024 	   positions    TABLE     �   CREATE TABLE public.positions (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    description character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.positions;
       public         heap    postgres    false            �            1259    17023    positions_id_seq    SEQUENCE     y   CREATE SEQUENCE public.positions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.positions_id_seq;
       public          postgres    false    225            X           0    0    positions_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.positions_id_seq OWNED BY public.positions.id;
          public          postgres    false    224            �            1259    17041    s__locations    TABLE     �   CREATE TABLE public.s__locations (
    id bigint NOT NULL,
    name character varying(115) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.s__locations;
       public         heap    postgres    false            �            1259    17040    s__locations_id_seq    SEQUENCE     |   CREATE SEQUENCE public.s__locations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.s__locations_id_seq;
       public          postgres    false    227            Y           0    0    s__locations_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.s__locations_id_seq OWNED BY public.s__locations.id;
          public          postgres    false    226            �            1259    17012    statuses    TABLE     �   CREATE TABLE public.statuses (
    id bigint NOT NULL,
    name character varying(115) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.statuses;
       public         heap    postgres    false            �            1259    17011    statuses_id_seq    SEQUENCE     x   CREATE SEQUENCE public.statuses_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.statuses_id_seq;
       public          postgres    false    223            Z           0    0    statuses_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.statuses_id_seq OWNED BY public.statuses.id;
          public          postgres    false    222            �            1259    16952    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    username character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    role boolean DEFAULT false NOT NULL,
    position_id bigint
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16951    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    212            [           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    211            �           2604    16996 	   events id    DEFAULT     f   ALTER TABLE ONLY public.events ALTER COLUMN id SET DEFAULT nextval('public.events_id_seq'::regclass);
 8   ALTER TABLE public.events ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    218    219    219            �           2604    16972    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    214    215    215            �           2604    17006    locations id    DEFAULT     l   ALTER TABLE ONLY public.locations ALTER COLUMN id SET DEFAULT nextval('public.locations_id_seq'::regclass);
 ;   ALTER TABLE public.locations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    220    221            �           2604    16948    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    210    209    210            �           2604    16984    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    216    217            �           2604    17027    positions id    DEFAULT     l   ALTER TABLE ONLY public.positions ALTER COLUMN id SET DEFAULT nextval('public.positions_id_seq'::regclass);
 ;   ALTER TABLE public.positions ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    224    225    225            �           2604    17044    s__locations id    DEFAULT     r   ALTER TABLE ONLY public.s__locations ALTER COLUMN id SET DEFAULT nextval('public.s__locations_id_seq'::regclass);
 >   ALTER TABLE public.s__locations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    227    226    227            �           2604    17015    statuses id    DEFAULT     j   ALTER TABLE ONLY public.statuses ALTER COLUMN id SET DEFAULT nextval('public.statuses_id_seq'::regclass);
 :   ALTER TABLE public.statuses ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    223    223            �           2604    16955    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    212    211    212            D          0    16993    events 
   TABLE DATA           �   COPY public.events (id, title, description, date, start_hour, end_hour, created_at, updated_at, status, location_id) FROM stdin;
    public          postgres    false    219   5Y       @          0    16969    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    215   �Z       F          0    17003 	   locations 
   TABLE DATA           Z   COPY public.locations (id, name, description, created_at, updated_at, status) FROM stdin;
    public          postgres    false    221   �Z       ;          0    16945 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    210   �[       >          0    16962    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    213   �\       B          0    16981    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
    public          postgres    false    217   �\       J          0    17024 	   positions 
   TABLE DATA           R   COPY public.positions (id, name, description, created_at, updated_at) FROM stdin;
    public          postgres    false    225   
]       L          0    17041    s__locations 
   TABLE DATA           H   COPY public.s__locations (id, name, created_at, updated_at) FROM stdin;
    public          postgres    false    227   x^       H          0    17012    statuses 
   TABLE DATA           D   COPY public.statuses (id, name, created_at, updated_at) FROM stdin;
    public          postgres    false    223   �^       =          0    16952    users 
   TABLE DATA           �   COPY public.users (id, name, username, email, email_verified_at, password, remember_token, created_at, updated_at, role, position_id) FROM stdin;
    public          postgres    false    212   �^       \           0    0    events_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.events_id_seq', 13, true);
          public          postgres    false    218            ]           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    214            ^           0    0    locations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.locations_id_seq', 10, true);
          public          postgres    false    220            _           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 16, true);
          public          postgres    false    209            `           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    216            a           0    0    positions_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.positions_id_seq', 8, true);
          public          postgres    false    224            b           0    0    s__locations_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.s__locations_id_seq', 3, true);
          public          postgres    false    226            c           0    0    statuses_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.statuses_id_seq', 3, true);
          public          postgres    false    222            d           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 6, true);
          public          postgres    false    211            �           2606    17000    events events_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.events
    ADD CONSTRAINT events_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.events DROP CONSTRAINT events_pkey;
       public            postgres    false    219            �           2606    16977    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    215            �           2606    16979 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    215            �           2606    17010    locations locations_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.locations
    ADD CONSTRAINT locations_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.locations DROP CONSTRAINT locations_pkey;
       public            postgres    false    221            �           2606    16950    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    210            �           2606    16988 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    217            �           2606    16991 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    217            �           2606    17031    positions positions_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.positions
    ADD CONSTRAINT positions_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.positions DROP CONSTRAINT positions_pkey;
       public            postgres    false    225            �           2606    17046    s__locations s__locations_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.s__locations
    ADD CONSTRAINT s__locations_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.s__locations DROP CONSTRAINT s__locations_pkey;
       public            postgres    false    227            �           2606    17017    statuses statuses_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.statuses
    ADD CONSTRAINT statuses_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.statuses DROP CONSTRAINT statuses_pkey;
       public            postgres    false    223            �           2606    16961    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    212            �           2606    16959    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    212            �           1259    16967    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    213            �           1259    16989 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    217    217            �           2606    17018    events events_status_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.events
    ADD CONSTRAINT events_status_foreign FOREIGN KEY (status) REFERENCES public.statuses(id) ON DELETE RESTRICT;
 F   ALTER TABLE ONLY public.events DROP CONSTRAINT events_status_foreign;
       public          postgres    false    223    219    3240            �           2606    17047 "   locations locations_status_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.locations
    ADD CONSTRAINT locations_status_foreign FOREIGN KEY (status) REFERENCES public.s__locations(id) ON DELETE RESTRICT;
 L   ALTER TABLE ONLY public.locations DROP CONSTRAINT locations_status_foreign;
       public          postgres    false    227    3244    221            D   `  x����J�0�s�y��L��榈��^�d1Je[��}�l��ԓPJ��d�EN^��.�a=��N�͝7�'>�����!�@�KL9pA�Aπ� A��sY�2��H0�5$������Z?���s���@	׷8J�*����r��ni�s�-�i��+�6���<��_�wK�c���"��V��@[�%n���c�1�a�P��m���q�]�c�s֣�:fŰ�tYݢL��_T'�����7`!�]��@�\��h��]r�v�e��`��\Ĳ�_뼬�N�a�w�+>��OJtF^w��s.���������f;�M�����P04��6BUkH����i�{R4      @      x������ � �      F   �   x���M
�0�ur�\���$���]v#��X+���wJ���"�y���K4+����B���:���0�����̃��W;3���ԙ!] ���\@ŀ���;Y��yP�Dv9n�dH�%u6GYu�7��d���D�I�����*���V�.����U�NTʸ[!�6E��xG�(�ׯ��U��Ҽ�DE��*���i,����)}���"�^8�oV_��      ;      x�m��n� E��0\D��Ʉ�4�5�m�����$&k1{�Gȷ�ջ��+�5br��?��+��b�	눫�>UEf�"�1����ُ��W;��W;�J7�I	~��&SP|� $�L1��_.��Jjj!�Kt#%��[o��I8�6:�DY2��ۈ>K�bAe:��-a�0�4�Kr��F[�8&�hDe�7p@?nN9EF� �����潮���f ��VZ.��%.N�?=A^5ڥ�V&Z�RЇEO�7��1�ِ`�����uQ���0�~0�߇      >      x������ � �      B      x������ � �      J   ^  x����N�0E��W�Z�N� [ذ�@*K6�v�����S���}�T,M�'s�\�>v�-���fV���� �\UEW��a���S]��o@�tFu��`��� n(t��AV2��YY�J�����s�;\�ߥx�_�6��P�d �+���@>�c���L`�q�6,N!��"��o|e��&[gj͏E�dj.�����
��)n�&���K�z���D<���x���m���J=19h�6a�������m�;qp�@X%'F�Q�Sdm���q�fȃ�ŕ�⽘�19s5�a�7GƲ��Eh�ɞ�:�y�α���[AFQd���5S�����>&_�R���0�      L   /   x�3�H�K��K��".#Nǲ�̜Ĥ�T��1gh^"�X� ��T      H   1   x�3�,H�K��K��".#�Ă�������1gJjrNf\ F��� ��(      =   �  x�}��r�@��us,܊�͙�x�QEQ+"(��>�,f��Y�_UW=����O��5h�E��g�5�ׯ#��;d����;��ڗ�����Wb�d�so�6��9������J�Im�ԫ�d ?��{1߅Bb�R4Q��)���x# ��8Lޡ'�Pp�����3�2�t�����<�8��W����n�L�a���_�-�򈅒�&�߭7V�A��IVE���Kb/�@�1��YZŸ�k����f��h��8[,���'Qz�&�6�>��JG�q�e�'1d��F���E*�3��,eWqEIVx�$M�?e+�gQQw(�3�nW+�r�s˫�*!��~���>��a�%�+i��_�Rcm�"#�iV�^��� Bpzϼ�Z�V�Q���Aum7���Ash ���4��Jݭҭs
�����s[��X�BU���X_8�a� �{      