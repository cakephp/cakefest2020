-- Add share links for files
CREATE TABLE public.file_share_links (
    id serial not null,
    file_id integer not null,
    token char(64) not null,
    expires_at timestamp without time zone not null,
    created timestamp without time zone not null,
    modified timestamp without time zone not null
);
ALTER TABLE public.file_share_links
  ADD CONSTRAINT file_share_links_pkey PRIMARY KEY (id),
  ADD CONSTRAINT file_share_file_idx FOREIGN KEY (file_id) REFERENCES files (id);

