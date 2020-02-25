
## Phycom application template for building e-commerce site


### Ansible configuration for deployments

* Add a target host to `ansible/hosts` file

* Modify `ansible/group_vars/webservers/vars.yml` to suit your needs

* Add host-specific configuration under `ansible/host_vars`. It can be similar to `ansible/group_vars/webservers` but each host should have its subfolder named as host id

* Store all sensitive info encrypted by ansible vault


