--
-- PostgreSQL database dump
--

-- Dumped from database version 12.4 (Ubuntu 12.4-0ubuntu0.20.04.1)
-- Dumped by pg_dump version 12.4 (Ubuntu 12.4-0ubuntu0.20.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: files; Type: TABLE; Schema: public; Owner: my_app
--

CREATE TABLE public.files (
    id integer NOT NULL,
    group_id integer NOT NULL,
    name character varying(255) NOT NULL,
    type character varying(255) NOT NULL,
    path character varying(255) NOT NULL,
    metadata jsonb,
    created timestamp without time zone NOT NULL,
    modified timestamp without time zone NOT NULL
);


ALTER TABLE public.files OWNER TO my_app;

--
-- Name: files_id_seq; Type: SEQUENCE; Schema: public; Owner: my_app
--

CREATE SEQUENCE public.files_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.files_id_seq OWNER TO my_app;

--
-- Name: files_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: my_app
--

ALTER SEQUENCE public.files_id_seq OWNED BY public.files.id;


--
-- Name: groups; Type: TABLE; Schema: public; Owner: my_app
--

CREATE TABLE public.groups (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created timestamp without time zone NOT NULL,
    modified timestamp without time zone NOT NULL
);


ALTER TABLE public.groups OWNER TO my_app;

--
-- Name: groups_id_seq; Type: SEQUENCE; Schema: public; Owner: my_app
--

CREATE SEQUENCE public.groups_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.groups_id_seq OWNER TO my_app;

--
-- Name: groups_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: my_app
--

ALTER SEQUENCE public.groups_id_seq OWNED BY public.groups.id;


--
-- Name: groups_users; Type: TABLE; Schema: public; Owner: my_app
--

CREATE TABLE public.groups_users (
    id integer NOT NULL,
    group_id integer NOT NULL,
    user_id integer NOT NULL,
    role character varying(255) DEFAULT 'user'::character varying NOT NULL
);


ALTER TABLE public.groups_users OWNER TO my_app;

--
-- Name: groups_users_id_seq; Type: SEQUENCE; Schema: public; Owner: my_app
--

CREATE SEQUENCE public.groups_users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.groups_users_id_seq OWNER TO my_app;

--
-- Name: groups_users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: my_app
--

ALTER SEQUENCE public.groups_users_id_seq OWNED BY public.groups_users.id;


--
-- Name: phinxlog; Type: TABLE; Schema: public; Owner: my_app
--

CREATE TABLE public.phinxlog (
    version bigint NOT NULL,
    migration_name character varying(100),
    start_time timestamp without time zone,
    end_time timestamp without time zone,
    breakpoint boolean DEFAULT false NOT NULL
);


ALTER TABLE public.phinxlog OWNER TO my_app;

--
-- Name: tagged; Type: TABLE; Schema: public; Owner: my_app
--

CREATE TABLE public.tagged (
    id integer NOT NULL,
    table_alias character varying(255) NOT NULL,
    foreign_key integer NOT NULL,
    tag_id integer NOT NULL,
    created timestamp without time zone NOT NULL,
    modified timestamp without time zone NOT NULL
);


ALTER TABLE public.tagged OWNER TO my_app;

--
-- Name: tagged_id_seq; Type: SEQUENCE; Schema: public; Owner: my_app
--

CREATE SEQUENCE public.tagged_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tagged_id_seq OWNER TO my_app;

--
-- Name: tagged_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: my_app
--

ALTER SEQUENCE public.tagged_id_seq OWNED BY public.tagged.id;


--
-- Name: tags; Type: TABLE; Schema: public; Owner: my_app
--

CREATE TABLE public.tags (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    occurrence integer NOT NULL,
    created timestamp without time zone NOT NULL,
    modified timestamp without time zone NOT NULL
);


ALTER TABLE public.tags OWNER TO my_app;

--
-- Name: tags_id_seq; Type: SEQUENCE; Schema: public; Owner: my_app
--

CREATE SEQUENCE public.tags_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tags_id_seq OWNER TO my_app;

--
-- Name: tags_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: my_app
--

ALTER SEQUENCE public.tags_id_seq OWNED BY public.tags.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: my_app
--

CREATE TABLE public.users (
    id integer NOT NULL,
    first_name character varying(255),
    last_name character varying(255),
    email character varying(255),
    password character varying(255) NOT NULL,
    active boolean DEFAULT false NOT NULL,
    created timestamp without time zone NOT NULL,
    modified timestamp without time zone NOT NULL
);


ALTER TABLE public.users OWNER TO my_app;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: my_app
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO my_app;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: my_app
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: files id; Type: DEFAULT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.files ALTER COLUMN id SET DEFAULT nextval('public.files_id_seq'::regclass);


--
-- Name: groups id; Type: DEFAULT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.groups ALTER COLUMN id SET DEFAULT nextval('public.groups_id_seq'::regclass);


--
-- Name: groups_users id; Type: DEFAULT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.groups_users ALTER COLUMN id SET DEFAULT nextval('public.groups_users_id_seq'::regclass);


--
-- Name: tagged id; Type: DEFAULT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.tagged ALTER COLUMN id SET DEFAULT nextval('public.tagged_id_seq'::regclass);


--
-- Name: tags id; Type: DEFAULT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.tags ALTER COLUMN id SET DEFAULT nextval('public.tags_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: files; Type: TABLE DATA; Schema: public; Owner: my_app
--

COPY public.files (id, group_id, name, type, path, metadata, created, modified) FROM stdin;
\.


--
-- Data for Name: groups; Type: TABLE DATA; Schema: public; Owner: my_app
--

COPY public.groups (id, name, created, modified) FROM stdin;
1	1	2020-09-24 15:31:28.973809	2020-09-24 15:31:28.974403
\.


--
-- Data for Name: groups_users; Type: TABLE DATA; Schema: public; Owner: my_app
--

COPY public.groups_users (id, group_id, user_id, role) FROM stdin;
\.


--
-- Data for Name: phinxlog; Type: TABLE DATA; Schema: public; Owner: my_app
--

COPY public.phinxlog (version, migration_name, start_time, end_time, breakpoint) FROM stdin;
20200924145451	Init	2020-09-24 15:25:05	2020-09-24 15:25:05	f
\.


--
-- Data for Name: tagged; Type: TABLE DATA; Schema: public; Owner: my_app
--

COPY public.tagged (id, table_alias, foreign_key, tag_id, created, modified) FROM stdin;
1	files	1	1	2020-09-24 15:32:01.147454	2020-09-24 15:32:01.148094
\.


--
-- Data for Name: tags; Type: TABLE DATA; Schema: public; Owner: my_app
--

COPY public.tags (id, name, occurrence, created, modified) FROM stdin;
1	a	0	2020-09-24 15:31:44.578262	2020-09-24 15:31:44.578767
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: my_app
--

COPY public.users (id, first_name, last_name, email, password, active, created, modified) FROM stdin;
1	1	1	1@example.com	1	t	2020-09-24 15:31:19.250098	2020-09-24 15:31:19.250705
\.


--
-- Name: files_id_seq; Type: SEQUENCE SET; Schema: public; Owner: my_app
--

SELECT pg_catalog.setval('public.files_id_seq', 1, false);


--
-- Name: groups_id_seq; Type: SEQUENCE SET; Schema: public; Owner: my_app
--

SELECT pg_catalog.setval('public.groups_id_seq', 1, true);


--
-- Name: groups_users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: my_app
--

SELECT pg_catalog.setval('public.groups_users_id_seq', 1, false);


--
-- Name: tagged_id_seq; Type: SEQUENCE SET; Schema: public; Owner: my_app
--

SELECT pg_catalog.setval('public.tagged_id_seq', 1, true);


--
-- Name: tags_id_seq; Type: SEQUENCE SET; Schema: public; Owner: my_app
--

SELECT pg_catalog.setval('public.tags_id_seq', 1, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: my_app
--

SELECT pg_catalog.setval('public.users_id_seq', 1, true);


--
-- Name: files files_pkey; Type: CONSTRAINT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.files
    ADD CONSTRAINT files_pkey PRIMARY KEY (id);


--
-- Name: groups groups_pkey; Type: CONSTRAINT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.groups
    ADD CONSTRAINT groups_pkey PRIMARY KEY (id);


--
-- Name: groups_users groups_users_pkey; Type: CONSTRAINT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.groups_users
    ADD CONSTRAINT groups_users_pkey PRIMARY KEY (id);


--
-- Name: phinxlog phinxlog_pkey; Type: CONSTRAINT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.phinxlog
    ADD CONSTRAINT phinxlog_pkey PRIMARY KEY (version);


--
-- Name: tagged tagged_pkey; Type: CONSTRAINT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.tagged
    ADD CONSTRAINT tagged_pkey PRIMARY KEY (id);


--
-- Name: tags tags_pkey; Type: CONSTRAINT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.tags
    ADD CONSTRAINT tags_pkey PRIMARY KEY (id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: my_app
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

