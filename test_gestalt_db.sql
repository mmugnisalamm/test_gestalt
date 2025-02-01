--
-- PostgreSQL database dump
--

-- Dumped from database version 10.23
-- Dumped by pg_dump version 10.4

-- Started on 2025-02-01 10:43:08

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2818 (class 1262 OID 44035)
-- Name: test_gestalt; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE test_gestalt WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_Indonesia.1252' LC_CTYPE = 'English_Indonesia.1252';


ALTER DATABASE test_gestalt OWNER TO postgres;

\connect test_gestalt

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2 (class 3079 OID 12924)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2820 (class 0 OID 0)
-- Dependencies: 2
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- TOC entry 1 (class 3079 OID 16384)
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- TOC entry 2821 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 197 (class 1259 OID 44036)
-- Name: buku; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.buku (
    id bigint NOT NULL,
    title character varying(100) NOT NULL,
    author character varying(100),
    price_rent numeric,
    book_category character varying(10),
    CONSTRAINT check_book_category CHECK (((book_category)::text = ANY ((ARRAY['MANGA'::character varying, 'NOVEL'::character varying, 'MAGAZINE'::character varying])::text[]))),
    CONSTRAINT check_price_rent CHECK ((price_rent > (0)::numeric))
);


ALTER TABLE public.buku OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 44046)
-- Name: customer; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.customer (
    id bigint NOT NULL,
    name character varying(100),
    identity_card_number character varying(50) NOT NULL,
    address character varying(50)
);


ALTER TABLE public.customer OWNER TO postgres;

--
-- TOC entry 199 (class 1259 OID 44051)
-- Name: rent; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.rent (
    id bigint NOT NULL,
    customer_id bigint,
    book_id bigint,
    date_rent date NOT NULL,
    date_return date,
    CONSTRAINT check_date_return CHECK ((date_return > date_rent))
);


ALTER TABLE public.rent OWNER TO postgres;

--
-- TOC entry 2810 (class 0 OID 44036)
-- Dependencies: 197
-- Data for Name: buku; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.buku (id, title, author, price_rent, book_category) FROM stdin;
250201001002	Cantik itu Luka	Eka Kurniawan	5500	NOVEL
250201001001	Bumi Manusia	Pramudya Ananta Toer	6000	NOVEL
250201003001	Sousou no Frieren	Yamada	2000	MANGA
250201002001	Majalah Tempo Edisi Kamisan	Tempo	1500	MAGAZINE
250201003002	Dandadan	Tatsu	2500	MANGA
\.


--
-- TOC entry 2811 (class 0 OID 44046)
-- Dependencies: 198
-- Data for Name: customer; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.customer (id, name, identity_card_number, address) FROM stdin;
250201001	Mugni	1234567890	Bandung
250201002	Hitsugaya	9876543210	Tokyo
\.


--
-- TOC entry 2812 (class 0 OID 44051)
-- Dependencies: 199
-- Data for Name: rent; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.rent (id, customer_id, book_id, date_rent, date_return) FROM stdin;
1	250201001	250201001001	2025-02-01	2025-02-10
2	250201001	250201001001	2025-02-01	2025-02-10
3	250201001	250201001001	2025-02-01	2025-02-10
4	250201001	250201001001	2025-02-01	2025-02-10
5	250201001	250201001001	2025-02-01	2025-02-10
6	250201001	250201001001	2025-02-01	2025-02-10
7	250201001	250201001001	2025-02-01	2025-02-10
8	250201001	250201001001	2025-02-01	2025-02-10
9	250201001	250201001001	2025-02-01	2025-02-10
10	250201001	250201001001	2025-02-01	2025-02-10
\.


--
-- TOC entry 2682 (class 2606 OID 44043)
-- Name: buku Buku_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.buku
    ADD CONSTRAINT "Buku_pkey" PRIMARY KEY (id);


--
-- TOC entry 2684 (class 2606 OID 44050)
-- Name: customer customer_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.customer
    ADD CONSTRAINT customer_pkey PRIMARY KEY (id);


--
-- TOC entry 2686 (class 2606 OID 44055)
-- Name: rent rent_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rent
    ADD CONSTRAINT rent_pkey PRIMARY KEY (id);


--
-- TOC entry 2687 (class 2606 OID 44056)
-- Name: rent rent_fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rent
    ADD CONSTRAINT rent_fk FOREIGN KEY (customer_id) REFERENCES public.customer(id);


--
-- TOC entry 2688 (class 2606 OID 44061)
-- Name: rent rent_fk1; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.rent
    ADD CONSTRAINT rent_fk1 FOREIGN KEY (book_id) REFERENCES public.buku(id);


-- Completed on 2025-02-01 10:43:08

--
-- PostgreSQL database dump complete
--

